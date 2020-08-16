<x-app>

<div id="wrapper" >
	<div id="page" class="lg:container bg-blue-100 rounded-lg shadow border px-2 py-2 mb-2">
        
        <form method="POST" action="/donate">
            @csrf
            <div class="text-center font-bold text-teal-700 text-4xl mb-2">
                Donate Blood
            </div>
            <div class="field">
                <label class="label" for="name">Name</label>   

                <div class="control">
                    <input class="label @error('name') is-danger @enderror w-1/2 rounded shadow" type="text" name="name" id="name">
                </div>
                @error('name')
                        <p class="help text-red-500 is-danger">{{$errors->first('name')}}</p>
                @enderror
            </div>

            <div class="field py-2">
                <label class="label" for="contact_no">Contact No.</label>   

                <div class="control">
                    <input class=" label @error('contact_no') is-danger @enderror w-auto rounded shadow " name="contact_no" id="contact_no" type="text" placeholder="enter 10 digit no."></textarea>
                </div>
                @error('contact_no')
                        <p class="help text-red-500 is-danger">{{$errors->first('contact_no')}}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label" for="email">Email</label>   

                <div class="control">
                    <input class="@error('email') is-danger @enderror w-1/2 rounded shadow" name="email" id="email" type="text">
                </div>
                @error('email')
                        <p class="help text-red-500 is-danger">{{$errors->first('email')}}</p>
                @enderror
            </div>

            <div class="field py-2">
                <label class="label" for="address">Address</label>   

                <div class="control">
                    <input class="w-full @error('address') is-danger @enderror rounded shadow" name="address" id="address" type="text">
                </div>
                @error('address')
                        <p class="help text-red-500 is-danger">{{$errors->first('address')}}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label" for="blood_group">Blood Group</label>   

                <div class="control">
                    <textarea class="label @error('blood_group') is-danger @enderror textarea w-full rounded shadow" name="blood_group" id="blood_group" type="text" placeholder="For many groups - groupname:units(A+:2)"></textarea>
                </div>
                @error('blood_group')
                        <p class="help text-red-500 is-danger">{{$errors->first('blood_group')}}</p>
                @enderror
            </div>

            <div class="field py-2">
                <label class="label" for="comments">Comments</label>   

                <div class="control">
                    <textarea class="label @error('comments') is-danger @enderror textarea w-full rounded shadow" name="comments" id="comments" placeholder="Please,enter any additional details your want to mention ?"></textarea>
                </div>
                @error('Comments')
                        <p class="help text-red-500 is-danger">{{$errors->first('Comments')}}</p>
                @enderror
            </div>
            
            <div class="field is-grouped mb-4">
                <div label class="controll">   
                    <button class="button is-link rounded-lg shadow bg-blue-500 font-bold text-white px-2 py-2" type="submit">SUBMIT</button>
                </div>
            </div>
        </form>  
    </div>
</div>
</x-app>