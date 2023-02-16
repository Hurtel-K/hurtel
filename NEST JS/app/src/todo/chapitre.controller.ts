import { Body, Controller, Delete, Get, Param, Patch, Post } from '@nestjs/common';
import { Chapitre } from 'src/entity/chapitre.entity';
import { ChapitreService } from './chapitre.service';
import { TodoService } from './todo.service';


@Controller('chapitre')


export class ChapitreController {



    constructor(private readonly chapitreservice: ChapitreService, private readonly todoservice: TodoService) { }


    @Get()
    getchapitre(): Promise<Chapitre[]> {
        return this.chapitreservice.findAll();
    }

    @Post()

    async createTodo(@Body() newchapitre: Chapitre): Promise<Chapitre> {
        const todo = await this.todoservice.findOne(newchapitre.todoId);
        if (todo)
            return await this.chapitreservice.create(newchapitre);
        else return null;
    }
}