@extends("layouts.master")
@section('title', 'Checkout')
@section('content')
    
    <header class="page-header">
        <h1>Checkout</h1>
        <h3 class="cart-amount">${{App\Models\Cart::totalAmount()}}</h3>
    </header>

    <main class="checkout-page">
        <div class="container">

            <div class="checkout-form">
                <form action="{{route('submitCheckout')}}" method="post">
                    @csrf

                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="@error('name') has-error @enderror" placeholder="John Doe" value="{{old('name') ? old('name') : auth()->user()->name}}">
                        @error('name')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="@error('email') has-error @enderror" placeholder="John Doe" value="{{old('email') ? old('email') : auth()->user()->email}}">
                        @error('email')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="@error('phone') has-error @enderror" placeholder="John Doe" value="{{old('phone') ? old('phone') : auth()->user()->phone}}">
                        @error('phone')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="country">Country</label>
                        <select name="country" id="country">
                            <option value="">-- Select Country --</option>
                            <option value="Taiwan">Taiwan</option>
                        </select>
                        @error('country')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="state">State</label>
                        <input type="text" id="state" state="state" name="state" class="@error('state') has-error @enderror" placeholder="New York" value="{{old('state')}}">
                        @error('state')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="city">City</label>
                        <input type="text" id="city" city="city" name="city" class="@error('city') has-error @enderror" placeholder="New York City" value="{{old('city')}}">
                        @error('city')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="zip">ZipCode</label>
                        <input type="text" id="zip" zip="zip" name="zip" class="@error('zip') has-error @enderror" placeholder="12345" value="{{old('zip')}}">
                        @error('zip')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="zip">Address</label>
                        <input type="text" id="address" name="address" class="@error('address') has-error @enderror" placeholder="ABC St." value="{{old('address')}}">
                        @error('address')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    

                    <button class="btn btn-primary btn-block" type="submit">Submit Payment</button>
                </form>
            </div>

        </div>
    </main>

@endsection

