<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

<h2 class="text-center">Vos Informations</h2>
<div class="container-fluid justify-content-center mt-5 d-flex">
    @foreach ($currentUser as $user)
    <form action="{{route('edit.profile',$user->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group row">
             <label for="">Adresse email</label>
         
                <div class="col-md-12">
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
           
        </div>
    
        <div class="form-group row">
             <label for="">Nom</label>
         
                <div class="col-md-12">
                    <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
                    </div>
           
        </div>
        
        <div class="form-group row">
             <label for="">Prénom(s)</label>
         
                <div class="col-md-12">
                    <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}">
                    </div>
           
        </div>
        
        <div class="form-group row">
             <label for="">Date de naissance</label>
         
                <div class="col-md-12">
                    <input type="date" name="birthday" class="form-control" value="{{$user->birthday}}">
                    </div>
           
        </div>
        <div class="form-group row">
            <label for="telephone">Numéro de téléphone</label>
        
               <div class="col-md-12">
                   <input type="tel" id="telephone" name="telephone" class="form-control" value="{{$user->phone}}">
                </div>
                  
          
       </div>
        <div class="form-group row">
             <label for="cv">Curriculum vitae</label>
         
                <div class="col-md-12">
                    <input type="file" name="cv" id="cv" class="form-control" value="{{$user->curriculum_vitae}}">
                    </div>
           
        </div>
        
        <div class="form-group row">
            <label for="school">Ecole</label>
            <div class="col-md-12" id="school_line">
                <select name="school" id="school" class="form-control" oninput="adaptField('{{$user->study_field}}')">
                    <option value="{{$user->school}}">{{$user->school}}</option>
                    @foreach ($school as $schools)
                        @if ($schools!=$user->school)
                        <option value="{{$schools}}">{{$schools}}</option>
                            
                        @endif
                    @endforeach
                </select>

            </div>
           
        </div>
        <div class="form-group row">
            <label for="">Filière d'étude</label>
            <div class="col-md-12" id="field_line">
                <select name="field" id="fields"  class="form-control">
                    
                        <option value="{{$user->study_field}}">{{$user->study_field}}</option>
                    @foreach ($fields as $item)
                    @if ($item!=$user->study_field)
                    <option value="{{$item}}">{{$item}}</option>
                        
                    @endif
                        
                    @endforeach
                  
                    
                </select>
            </div>
        </div>
            <div class="form-group row">
                <label for="">Secteur d'activité d'intérêt</label>
                <div class="col-md-6">
                    <select name="" id="" class="form-control">
                        <option value="{{$user->interest}}">{{$user->interest}}</option>
                        @foreach ($interests as $item)
                        @if ($item!=$user->interest)
                        <option value="{{$item}}">{{$item}}</option>
                            
                        @endif
                            
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="">Etes-vous intéressé par l'entreprenariat?</label>
                <div class="col-md-8">
                    <select name="doLove" id="interest" class="form-control">
                        <option value="{{$user->entrepreuneuship_lover}}">
                            @if ($user->entrepreuneuship_lover==1)
                            Oui
                            @else
                            Non
                                
                            @endif
                        
                        </option>
                       @foreach ($isEntrepreuner as $item)
                       @if ($item!=$user->entrepreuneuship_lover)
                       @if ($item==0)
                       <option value="">
                     Non
                        </option>
                        @else:
                        <option value="">
                     Oui
                        </option>
    
                       @endif
                       
                           
                       @endif
                           
                       @endforeach
                    </select>
                </div>
              
            </div>
            <div class="form-group row">
                <label for="">Niveau d'engagement</label>
                <select name="level" id="" class="form-control">
                    <option value="">{{$user->entrepreuneuship_level}}</option>
                    @foreach ($engagement_levels as $item)
                    @if ($item!=$user->entrepreuneuship_level)
                    <option value="{{$item}}">{{$item}}</option>
                        
                    @endif
                        
                    @endforeach

                </select>
            </div>
            <button type="submit " class="btn btn-primary mx-auto mt-2">Modifier</button>
           
            
            {{-- <div class="form-group-row">
                <label for="">Etes-vous intéressé par l'entreprenariat</label>
            </div> --}}
        </div>
      
        
        
        </form>
    @endforeach
   

</div>
<script>
    function adaptField(variable)
    {
        console.log(variable)
        // var filiere=field;
        var ifri_fields=['Genie Logiciel', 'Securite Informatique','Internet et Multimedia'];
        var epac_fields=['PSA','GTA','GE'];
        var fsa_fields=['STPV','STPA','AGRN','NSTA','GRPA'];
        var fast_fields=['ERSE'];
        var i=0;
        var select=document.createElement('select');
        select.classList.add('form-control');
        if(document.getElementById('school').value=='IFRI')
        {
         
            for(i=0;i<3;i++)
            {
               var option=document.createElement('option');
               option.innerHTML=ifri_fields[i];
               option.value=ifri_fields[i];
               console.log(option);
                select.appendChild(option);
            }
            console.log(select);
            document.getElementById('field_line').innerHTML='';
            document.getElementById('field_line').appendChild(select);

        }
        else if(document.getElementById('school').value=="FAST")
        {
            for(i=0;i<1;i++)
            {
                var option=document.createElement('option');
                option.innerHTML=fast_fields[i];
                option.value=fast_fields[i];
                select.appendChild(option);

            }
            document.getElementById('field_line').innerHTML='';
            document.getElementById('field_line').appendChild(select);
           
        }
        else if(document.getElementById('school').value=='EPAC')
        {
            for(i=0;i<3;i++)
            {
                var option=document.createElement('option');
                option.innerHTML=epac_fields[i];
                option.value=epac_fields[i];
                select.appendChild(option);
            }
            document.getElementById('field_line').innerHTML='';
            document.getElementById('field_line').appendChild(select);
        }
        else if(document.getElementById('school').value=='FSA'){
            for(i=0;i<5;i++)
            {
                var option=document.createElement('option');
                option.innerHTML=fsa_fields[i];
                option.value=fsa_fields[i];
                select.appendChild(option);
            }
            document.getElementById('field_line').innerHTML='';
            document.getElementById('field_line').appendChild(select);
            
        }
     //    console.log(filiere);
    }
 </script>
