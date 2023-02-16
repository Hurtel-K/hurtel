
import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { TodoService } from './todo.service';
import { Todo } from 'src/entity/todo.entity';
import { TodoController } from './todo.controller';


@Module({
  imports: [TypeOrmModule.forFeature([Todo])],
  providers: [TodoService],
  controllers: [TodoController],
  exports:[TodoService]
})
export class TodoModule {}