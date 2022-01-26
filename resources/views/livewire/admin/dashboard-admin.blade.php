<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

                     <div class="flex justify-center my-10 h-screen">
                          <div>
                              {{-- {{
                                  dd($users);
                              }}  --}}
                              <table class="min-w-full">
                                  <thead class="bg-white border-b">
                                      <tr>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              #
                                          </th>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Nom
                                          </th>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Prenom
                                          </th>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Adresse mail
                                          </th>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Telephone
                                          </th>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Date de naissance
                                          </th>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Ecole
                                          </th>
                                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Derniere mise a jour
                                          </th>
                                          <th scope="col" colspan="3"
                                              class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                              Actions
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                     @foreach ($users as $user)
                                     @foreach ($usersInfo as $userInfo)
                                         
                                    
                                         @if ($user->id==$userInfo->user_id)
                                        
                                          <tr
                                              class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100" id="line{{$user->id}}">
                                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                  {{ $user->id}}
                                              </td>
                                              <td class="first_name text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  {{$user->first_name}}
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{$user->last_name}}
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  {{$user->email}}
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                 {{$userInfo->phone}} 
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                 {{ $userInfo->birthday}}
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                 {{$userInfo->school}}
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  {{$userInfo->updated_at}}
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  <div class="flex space-x-3 justify-center">
                                                      <div>
                                                          <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" class="show_button d-none"></button>
                                                          <button type="button"  onclick="show({{$user->id}})"
                                                              class="inline-block rounded-full bg-blue-600 text-white leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
                                                              <svg aria-hidden="true" focusable="false"
                                                                  data-prefix="fas" data-icon="eye"
                                                                  class="w-3 mx-auto" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                  viewBox="0 0 512 512">
                                                                  <path fill="currentColor"
                                                                      d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                                  </path>
                                                              </svg>
                                                            </button>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  <div class="flex space-x-2 justify-center">
                                                      <div>
                                                          <button type="button" 
                                                              class="inline-block rounded-full bg-blue-600 text-white leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
                                                              <svg aria-hidden="true" focusable="false"
                                                                  data-prefix="fas" data-icon="download"
                                                                  class="w-3 mx-auto" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                  viewBox="0 0 512 512">
                                                                  <path fill="currentColor"
                                                                      d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                                                  </path>
                                                              </svg>
                                                            </button>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  <div class="flex space-x-2 justify-center ">
                                                      <div>
                                                          <button type="button" onclick="document.getElementById('model-open-{{$user->id}}').style.display='block'"
                                                              class="inline-block rounded-full bg-red-600 text-white leading-normal uppercase shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
                                                              <svg aria-hidden="true" focusable="false"
                                                                  data-prefix="fas" data-icon="trash-alt"
                                                                  class="w-3 mx-auto" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                  viewBox="0 0 512 512">
                                                                  <path fill="currentColor"
                                                                      d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                                                  </path>
                                                              </svg>
                                                              

                                                          </button>
                                                          {{-- <form action="{{route('user.destroy',$user)}}" method="POST"> --}}
                                                            @csrf
                                                            {{-- @method("DELETE") --}}
                                                            <div class="modal" id="model-open-{{$user->id}}">
                                                              <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title">La suppression d'un élément est définitive</h5>
                                                                    <button type="button" class="btn-close"  onclick="document.getElementById('model-open-{{$user->id}}').style.display='block'"data-bs-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true"></span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p>Etes-vous sûr de vouloir supprimer cet utilisateur?</p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    
                                                                    <a style="color:black" href="{{ route('user.destroy', ['id' => $user->id]) }}">
                                                                        <button class="btn btn-primary">Oui</button>
                                                                    </a>
                                                                    <button type="button" class="btn btn-secondary"  onclick="document.getElementById('model-open-{{$user->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          
                                                          
                                                          {{-- </form> --}}
                                                         
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>
                                          
                                          @endif
                                          @endforeach
                                          @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <div class="offcanvas offcanvas-top fixed bottom-0 flex flex-col max-w-full bg-white bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 left-0 right-0 border-none h-1/3 max-h-full"
                                tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                <div class="offcanvas-header flex items-center justify-between p-4">
                                    <h5 class="offcanvas-title mb-0 leading-normal font-semibold" id="offcanvasTopLabel">
                                        Informations de 'Alumni</h5>
                                        
                                    <button type="button"
                                        class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body flex-grow p-4 overflow-y-auto">
                                
                                </div>
                            </div>
                        

                         

                      </div>
                      <script>
                            function show(user_id){        
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
                                    }
                                });

                                $.ajax({
                                    url: 'admin/user/moreInfo/',
                                    type: 'POST',
                                    data: {
                                        id: user_id
                                    },
                                            
                                    dataType: 'JSON',
                                    success: function (data) {
                                        
                                        $(".offcanvas-body").html(data[0].last_name + ' . '+ data[0].first_name+' . '+data[0].email+' . '+data[0].school+' . '+data[0].birthday);
                                        $("#line"+data[0].id+" .show_button").click()

                                    }
                                });
                            };
                      </script>
    
