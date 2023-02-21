
import { ExtractJwt, Strategy } from 'passport-jwt';
import { PassportStrategy } from '@nestjs/passport';
import { Injectable } from '@nestjs/common';
import { ConfigService } from '@nestjs/config';
import { PayloadInterface } from '../interface/payload';
import { Repository } from 'typeorm';
import { Todo } from 'src/entity/todo.entity';
import { Inject } from '@nestjs/common/decorators/core/inject.decorator';
import { InjectRepository } from '@nestjs/typeorm';



@Injectable()
export class JwtStrategy extends PassportStrategy(Strategy) {
  constructor(
    private configService: ConfigService,
    @InjectRepository(Todo)
    private todoRepository: Repository<Todo>
  ) {
    super({
      jwtFromRequest: ExtractJwt.fromAuthHeaderAsBearerToken(),
      ignoreExpiration: false,
      secretOrKey: configService.get('SECRET'),
    });
  }

  async validate(payload: PayloadInterface) {
// je recupere mon titre
    const todo = await this.todoRepository.findOneBy({titre: payload.titre});
 //si le user existe je le retoune et la Automatiquement ce que
 //je retoune dans le validate est mis dans le request
 if(todo){
    const { password, salt,...result} = todo;
    return result;
  }
//else

 //si non je declenche une erreu
//  {throw new Unau();}
  }
}