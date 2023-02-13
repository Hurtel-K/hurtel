import { Body, Controller, Get,Post} from '@nestjs/common';
import { Todo } from './interfaces/todo.interface';
import { TodosService } from './todos.service';

@Controller('todos')
export class TodosController {
constructor(private readonly todosservice: TodosService){}

@Get()
findAll(): Todo[] {
      return this.todosservice.findAll();
   }

   
 @Post()

 createTodo(@Body() newTodo) {
  console.log('newTodo',newTodo);
this.todosservice.create(newTodo);
 }
}
  