import { Body, Controller,Delete,Get, Param, Patch, Post, UploadedFile, UseGuards, UseInterceptors} from '@nestjs/common';
import { FileInterceptor } from '@nestjs/platform-express';
import { diskStorage } from 'multer';
import { extname } from 'path';
import { Todo } from 'src/entity/todo.entity';
import { LoginCredentialsDto } from './DTO/login dentialsDto';
import { TodoSubcribeDto } from './DTO/usersubcribedto';
import { JwtAuthGuard } from './guard/guard';
import { TodoService } from './todo.service';


@Controller('todo')


export class TodoController {

    constructor(private readonly todoservice: TodoService){}
    
    @Get()
    @UseGuards(JwtAuthGuard)
    getAll(): Promise<Todo[]>{
        return this.todoservice.findAll();
    }
    
   
 @Post('/first')

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
  
@Post()

SubcribeTodo(@Body() todoData:TodoSubcribeDto): Promise<Partial<Todo>> {
return this.todoservice.subcribe(todoData);
}
 
@Post('login')

login(@Body() credentials:LoginCredentialsDto) {
return this.todoservice.login(credentials);
}
@Post('file')
@UseInterceptors(FileInterceptor('file',{
storage: diskStorage({

  destination:'/files',

  filename:(req, file, callback) =>{
   
  const uniqueSuffix =  

  Date.now() + '-' + Math.round(Math.random() * 1e9);
  
  const ext = extname(file.originalname);
  const filename = `${file.originalname}-${uniqueSuffix}-${ext}`; 
  callback(null, filename);
  },
})

}))
handleUpload(@UploadedFile() file: Express.Multer.File ){
  console.log('file', file);

  return 'File Upload API'; 
}
}