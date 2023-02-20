
import { IsEmpty, IsString } from 'class-validator';
import { IsBoolean, IsNotEmpty, IsNumber } from 'class-validator';
import { TodoRoleEnum } from 'src/emmu/todoRole.enum';
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

  @IsEmpty()
  @Column()
  description: string;



  @IsEmpty()
  @Column({ default: true })
  isActive: boolean;

  @Column()
  password: string;


  @Column()
  salt: string;


  @Column({
    type: 'enum',
    enum: TodoRoleEnum,
    default: TodoRoleEnum.USER
  })
  role: string;



  @OneToMany(type => Chapitre, (chapitre) => chapitre.todo, {
    onDelete: 'CASCADE'
  }

  )
  chapitres: Chapitre[];
}