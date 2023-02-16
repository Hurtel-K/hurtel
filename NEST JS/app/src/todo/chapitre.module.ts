import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Chapitre } from 'src/entity/chapitre.entity';
import { ChapitreController } from './chapitre.controller';
import { ChapitreService } from './chapitre.service';
import { TodoModule } from './todo.module';
import { TodoService } from './todo.service';

@Module({
  imports: [TypeOrmModule.forFeature([Chapitre]),TodoModule],
  providers: [ChapitreService],
  controllers: [ChapitreController],
})
export class ChapitreModule {}