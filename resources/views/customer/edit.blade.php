<h1>Edit Customer </h1>

<form action="/customers/{{$customer->id}}" method="post">
    @method('PATCH')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" autocomplete="off" value="{{ $customer->name}}">
        <p style="color:red";>@error('name') {{$message}} @enderror</p>
    </div>

    <div>
    <label for="email">Email</label>
        <input type="text" name="email" autocomplete="off" value="{{ $customer->email}}">
        <p style="color:red";>@error('email') {{$message}} @enderror</p>
    </div>
    @csrf

    <button>Edit Customer</button>
</form>