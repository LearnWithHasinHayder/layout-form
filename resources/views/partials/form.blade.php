<form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" >
        @error('name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" >
        @error('email')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" >{{ old('message') }}</textarea>
        @error('message')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="mt-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Submit
    </button>
</form>