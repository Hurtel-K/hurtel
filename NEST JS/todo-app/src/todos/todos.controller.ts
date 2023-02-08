import { Controller, Get } from '@nestjs/common';
import { TodosService } from './todos.service';

@Controller('todos')
export class TodosController {
constructor(private readonly todosservice: TodosService){}

 @Get()
   findAll(): any[] {
 return this.todosservice.findAll();
   }
}
