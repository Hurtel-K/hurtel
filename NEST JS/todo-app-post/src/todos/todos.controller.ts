import { Body, Controller, Get,Post,Param, Patch, Delete} from '@nestjs/common';
import { CreateTodoDto } from './DTO/create-todo.dto';
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

 createTodo(@Body() newTodo:CreateTodoDto) {
this.todosservice.create(newTodo);
 }
@Patch(':id')
updateTodo(@Param('id') id:string,@Body() todo:CreateTodoDto){

  return this.todosservice.update(id, todo);
}
 
@Delete(':id')
deleteTodo(@Param('id') id:string){
  return this.todosservice.delete(id);
}
}
  