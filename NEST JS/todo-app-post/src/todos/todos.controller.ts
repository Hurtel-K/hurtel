import { Body, Controller, Get,Post,Param} from '@nestjs/common';
import { Todo } from './interfaces/todo.interface';
import { TodosService } from './todos.service';

@Controller('todos')
export class TodosController {
constructor(private readonly todosservice: TodosService){}


@Get(':id')
findOne(@Param('id') id:string){
return this.todosservice.findOne(id);
  // console.log('id',id);
}

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
  