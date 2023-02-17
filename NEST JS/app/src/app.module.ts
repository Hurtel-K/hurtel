import { MiddlewareConsumer, Module, NestModule } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { TypeOrmModule } from '@nestjs/typeorm';
import { TodoModule } from './todo/todo.module';
import { ChapitreModule } from './todo/chapitre.module';
import { FirstMiddleware } from './middlewares/first/first.middleware';

@Module({
  imports: [
    TypeOrmModule.forRoot({
      type: 'mysql',
      host: 'localhost',
      port: 3306,
      username: 'hurtel',
      password: '5500hh..',
      database: 'test',
      autoLoadEntities:true,
      entities: [ 'src/entity/**/*.entity{.ts,.js}'],
      synchronize: true,
    }),
    TodoModule,
    ChapitreModule
  ],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule implements NestModule {
  configure(consumer: MiddlewareConsumer): any {
    consumer.apply(FirstMiddleware).forRoutes('todo')
   
  }
}
