<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex items-center justify-between">
                {{ __('') }}
            </div>
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 gap-8 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

   

<div class="form-container">
    <div class="form-box">
    <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control-file" required>
            </div>







            <div>
                <label for="number">Number:</label>
                <input type="tel" id="number" name="number" required>
            </div>

            <div>
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="HR">HR</option>
                    <option value="Admin">Admin</option>
                    <option value="Development">Development</option>
                </select>
            </div>

            <div>
                <label for="bloodgroup">Blood Group:</label>
                <select id="bloodgroup" name="bloodgroup" required>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <!-- Add more options for other blood groups -->
                </select>
            </div>
<!-- Add more options for other blood groups -->
            <div style="display: flex; align-items: center;">
            <div><label for="skillset">Gender</label></div>

        <div style="display: flex; align-items: center; margin-right: 20px;">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">male</label>
        </div>




        
        <div style="display: flex; align-items: center;margin-right: 20px;">
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
        </div>
    </div>




    
    <div style="display: flex; align-items: center;">
    <div>Skillset</div>
    <div style="display: flex; align-items: center; margin-right: 20px;">
    <input type="radio" name="skillset" value="HTML" required>
    <div for="male">HTML</div>
</div>
<div style="display: flex; align-items: center;">
    <input type="radio"  name="skillset" value="CSS" required>
    <div for="female">CSS</div>
</div>

    </div>

            <button type="submit" class="btn btn-primary" style="background-color: green; color: white; border-radius: 5px; margin: 10px; padding: 10px;">Submit</button>
        </form>
        @if (isset($form->photo))
            <div class="mt-4">
                <h3>Uploaded Photo:</h3>
                <img src="{{ asset('storage/' . $form->photo) }}" alt="Uploaded Photo" class="img-fluid">

            </div>
        @endif
    </div>
</div>















        </div>

</x-app-layout>



