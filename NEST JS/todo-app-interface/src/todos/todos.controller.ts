import { Controller, Get } from '@nestjs/common';
import { Todo } from './interfaces/todo.interface';
import { TodosService } from './todos.service';

@Controller('todos')
export class TodosController {
constructor(private readonly todosservice: TodosService){}

 @Get()
   findAll(): Todo[] {
 return this.todosservice.findAll();
   }
}
