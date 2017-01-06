<section  class="home-section-10 ">
    <div class="home-container container page_container">
        
        <div class="home-section-content">
            <div class="ufbl-form-wrapper ufbl-default-template" style="width:100%;">
                
                <form method="get" action="/enviar_email" class="ufbl-front-form">
                    <div class="ufbl-form-title">CONTACTO</div>             <input type="hidden" name="form_id" value="1" class="form-id"/>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 form-group">
                                {!! Form::label('name', 'Nombre') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'name']) !!}
                                <small style="color:yellow" v-if="errors.name">Este campo es obligatorio</small>
                        </div>
                        <div class="col-sm-6 col-xs-12 form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: juan@gmail.com', 'v-model' => 'email']) !!}
                                <small style="color:yellow" v-if="errors.email">Este campo es obligatorio</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="phone-group col-sm-6 col-xs-12 form-group">
                                {!! Form::label('phone', 'Teléfono') !!}
                                {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'phone']) !!}
                                <small style="color:yellow" v-if="errors.phone">Este campo es obligatorio</small>
                        </div>
                        <div class="col-sm-6 col-xs-12 form-group">
                                {!! Form::label('nss', 'Número de Seguridad Social') !!}
                                {!! Form::text('nss', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'nss']) !!}
                                <small style="color:yellow" v-if="errors.nss">Este campo es obligatorio</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 form-group">
                                {!! Form::label('birthday', 'Fecha de Nacimiento') !!}
                                {!! Form::date('birthday', null, ['class' => 'form-control', 'required' => 'required', 'v-model' => 'birthday']) !!}
                                <small style="color:yellow" v-if="errors.birthday">Este campo es obligatorio</small>
                        </div>
                        <div class="message-group col-xs-12 form-group">
                                {!! Form::label('message', 'Mensajess') !!}
                                {!! Form::textarea('message', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 6, 'v-model' => 'message']) !!}
                                <small style="color:yellow" v-if="errors.message">Este campo es obligatorio</small>
                        </div>
                    </div>
                    <div class="ufbl-form-message" style="display: none;"></div>
                    <div class="col-xs-4 col-xs-offset-4 form-group">
                        <a v-if="btncontacto" v-on:click="contacto" class="btn btn-block btn-primary btn-cta">Enviar</a>
                        <img v-if="!btncontacto" src="http://egenersac.com/imagenes/loading.gif" alt="" class="img-responsive center-block" width=100px>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>