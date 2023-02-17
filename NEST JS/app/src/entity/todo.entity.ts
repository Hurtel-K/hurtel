
import { IsString } from 'class-validator';
import { IsBoolean, IsNotEmpty, IsNumber } from 'class-validator';
import { Entity, Column, PrimaryGeneratedColumn, OneToMany } from 'typeorm';
import { Chapitre } from './chapitre.entity';

@Entity()
export class Todo {

  @PrimaryGeneratedColumn()
  id: number;

  @IsNotEmpty({
    message: 'le champ titre est obligatoire'
  })
  @IsString()
  @Column()
  titre: string;

  @IsNotEmpty()
  @IsString()
  @Column()
  description: string;

  @IsNotEmpty()
  @IsBoolean()
  @Column({ default: true })
  isActive: boolean;

  @OneToMany(type => Chapitre, (chapitre) => chapitre.todo,{
    cascade:true,
    nullable:true
  }
     
  )
  chapitres: Chapitre[];
}