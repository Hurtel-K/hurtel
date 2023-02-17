import { Body, Controller,Delete,Get, Param, Patch, Post} from '@nestjs/common';
import { Todo } from 'src/entity/todo.entity';
import { TodoService } from './todo.service';


@Controller('todo')


export class TodoController {

    constructor(private readonly todoservice: TodoService){}
    
    @Get()
    getAll(): Promise<Todo[]>{
        return this.todoservice.findAll();
    }
    
   
 @Post()

 createTodo(@Body() newtodo:Todo) {
this.todoservice.create(newtodo);
return('cree avec succes');
 }
 @Patch(':id')
updateTodo(@Param('id') id:string,@Body() todo:Todo){

  return this.todoservice.update(+id, todo);
}

@Delete(':id')
deleteTodo(@Param('id') id:string){
  return this.todoservice.remove(id);
}

}