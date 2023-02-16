
import { Injectable, NotFoundException, InternalServerErrorException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Chapitre } from 'src/entity/chapitre.entity';
import { Todo } from 'src/entity/todo.entity';
import { Repository } from 'typeorm';


@Injectable()
export class ChapitreService {


    constructor(
        @InjectRepository(Chapitre)
        private chapitreRepository: Repository<Chapitre>,
    ) { }


    findAll(): Promise<Chapitre[]> {
        return this.chapitreRepository.find();
    }



    async create(chapitre: Chapitre): Promise<Chapitre> {
        try {
            const chap = new Chapitre();
            chap.nom = chapitre.nom;
            chap.todoId = chapitre.todoId
            const newsChapitre = await this.chapitreRepository.save(chap);
            return newsChapitre;
        } catch (error) {
            throw new InternalServerErrorException(error);
        }
    }
}