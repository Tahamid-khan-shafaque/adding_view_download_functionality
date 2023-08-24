<div style="text-align: center;">
    <h2 style="margin-top: 50px; font-size: 30px;">User Details</h2>
    <div style="display: inline-block; text-align: left; border: 2px solid #ccc; padding: 30px; border-radius: 10px;">
        <div style="margin-bottom: 20px;">
            @if ($formData->photo)
                <img src="{{ asset('storage/subdirectory/' . $formData->photo) }}" width="200">
            @else
                No Photo
            @endif
        </div>
        <p style="font-size: 18px;"><strong>Name:</strong> {{ $formData->name }}</p>
        <p style="font-size: 18px;"><strong>Email:</strong> {{ $formData->email }}</p>
        <p style="font-size: 18px;"><strong>Number:</strong> {{ $formData->number }}</p>
        <p style="font-size: 18px;"><strong>Department:</strong> {{ $formData->department }}</p>
        <p style="font-size: 18px;"><strong>Blood Group:</strong> {{ $formData->bloodgroup }}</p>
        <p style="font-size: 18px;"><strong>Gender:</strong> {{ $formData->gender }}</p>
        <p style="font-size: 18px;"><strong>Skillset:</strong> {{ $formData->skillset }}</p>
    </div>
</div>
