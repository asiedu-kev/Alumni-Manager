<div>
    @if ($errors->any())
    <div >
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form>
        <div class="font-mono">
                <div> 
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                        Entrez votre adresse mail
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="email" id="email" type="email" required autofocus
                            class="@error('email') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="mt-4">
                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                        Entrez votre nom
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="first_name" id="first_name" type="text" required autofocus
                            class="@error('first_name') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('first_name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="mt-4">
                    <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">
                        Entrez votre prenom
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="last_name" id="last_name" type="text" required autofocus
                            class="@error('last_name') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('last_name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="mt-4">
                    <label for="birthday" class="block text-sm font-medium leading-5 text-gray-700">
                        Entrez votre date
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="birthday" id="birthday" type="date" required autofocus
                            class="@error('birthday') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('birthday') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <div class="mt-4">
                    <label for="phoneNumber" class="block text-sm font-medium leading-5 text-gray-700">
                        Entrez votre telephone
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="phoneNumber" id="phoneNumber" type="tel" required autofocus
                            class="@error('phoneNumber') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('phoneNumber') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button wire:click="continue"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Continuer
                        </button>
                    </span>
                </div>
                <!--Second step -->
                <!--CV AND SCHOOLS SELECTION -->
                <div class="mt-4">
                    <label for="curriculum_vitae" class="block text-sm font-medium leading-5 text-gray-700">
                        Veuillez uploader la derniere version de votre CV
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="curriculum_vitae" id="curriculum_vitae" type="file" required autofocus
                            class="@error('curriculum_vitae') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('curriculum_vitae') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="school" class="block text-sm font-medium leading-5 text-gray-700">
                        Veuillez choisir etablissement de formation
                    </label>
                    

                </div>
                <!--FIELD SLECTION -->
                <div class="mt-4">
                    <label for="field" class="block text-sm font-medium leading-5 text-gray-700">
                        Veuillez choisir filiere de formation
                    </label>


                </div>
                <!--Sector of interest -->
                <div class="mt-4">
                    <label for="interest" class="block text-sm font-medium leading-5 text-gray-700">
                        Veuillez choisir un secteur professionnel d'interet
                    </label>
                   
                </div>

                <!--Interest in entrepreuneurial life or not -->
                <div class="mt-4">
                    <label for="entrepreuneurial_interest" class="block text-sm font-medium leading-5 text-gray-700">
                        Etes vous interesse par l'entrepreunariat
                    </label>
                    <div class="flex items-center mb-4">
                        <input id="entrepreuneurial_interest" type="radio" wire:model="entrepreuneurial_interest" value="true"
                            class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300"
                            >
                        <label for="entrepreuneurial_interest" class="text-sm font-medium text-gray-900 ml-2 block">
                            Oui
                        </label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="entrepreuneurial_interest" type="radio" wire:model="entrepreuneurial_interest" value="false"
                            class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300"
                           >
                        <label for="entrepreuneurial_interest" class="text-sm font-medium text-gray-900 ml-2 block">
                            Non
                        </label>
                    </div>
                </div>

                <!--Interest in entrepreuneurial life is set to true -->
               
                <div class="flex w-full justify-between	">
                    <div class="mt-6">
                        <span class="block w-50 rounded-md shadow-sm">
                            <button wire:click="back"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Retour
                            </button>
                        </span>
                    </div>
                    <div class="mt-6">
                        <span class="block w-50 rounded-md shadow-sm">
                            <button
                            wire:click="continue"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Suivant
                            </button>
                        </span>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        Entrez un mot de passe
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="password" id="password" type="password" required autofocus
                            class="@error('password') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('password') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="mt-4">
                    <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                        Confirmer votre mot de passe
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="password_confirmation" id="password_confirmation" type="password" required autofocus
                            class="@error('password_confirmation') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('password_confirmation') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button wire:click="save"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Terminer
                        </button>
                    </span>
                </div>
        </div>
    </form>
</div>
