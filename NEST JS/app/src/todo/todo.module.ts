
import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { TodoService } from './todo.service';
import { Todo } from 'src/entity/todo.entity';
import { TodoController } from './todo.controller';
import { TodoSubcribeDto } from './DTO/usersubcribedto';
import { PassportModule } from '@nestjs/passport';
import { JwtModule } from '@nestjs/jwt';
import * as dotenv from 'dotenv';
import { JwtStrategy } from './strategie/passportJwt';
import { ConfigService } from '@nestjs/config';
import { MulterModule } from '@nestjs/platform-express';

dotenv.config();
@Module({
  imports: [TypeOrmModule.forFeature([Todo]),
  PassportModule.register({
    defaultStrategy:'jwt'
  }),
JwtModule.register({
  secret: process.env.SECRET
}),
MulterModule.register({dest:'./uploads'})

],

  providers: [TodoService, JwtStrategy,ConfigService],
  controllers: [TodoController],
  exports:[TodoService]
})
export class TodoModule {


}