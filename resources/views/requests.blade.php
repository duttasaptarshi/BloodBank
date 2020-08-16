<x-app>
<div id="wrapper" >
	<div id="page" class="lg:container bg-blue-100 rounded-lg shadow border px-2 py-2 mb-2">
        
        <form method="POST" action="/requests">
            @csrf
            <div class="text-center font-bold text-teal-700 text-4xl mb-2">
                Request Blood
            </div>
            <div class="field ">
                <label class="label" for="patients_name">Patients Name</label>   

                <div class="control">
                    <input class="@error('patients_name') is-danger @enderror w-1/2 rounded shadow" type="text" name="patients_name" id="Patients_name">
                </div>
                @error('patients_name')
                        <p class="help text-red-500 is-danger">{{$errors->first('patients_name')}}</p>
                @enderror
            </div>

            <div class="field py-2">
                <label class="label" for="contact_no">Contact No.</label>   
                <div class="control">
                    <input class="textarea @error('contact_no') is-danger @enderror label w-auto rounded shadow" name="contact_no" id="contact_no" type="text" placeholder="Enter 10 digit no."></textarea>
                </div>
                @error('contact_no')
                        <p class="help text-red-500 is-danger">{{$errors->first('contact_no')}}</p>
                @enderror
            </div>

            <div class="field py-2">
                <label class="label" for="blood_group">Blood Group</label>   

                <div class="control">
                    <input class="@error('blood_group') is-danger @enderror w-24 rounded shadow" type="text" name="blood_group" id="Blood_group">
                </div>
                @error('blood_group')
                    <p class="help text-red-500 is-danger">{{$errors->first('blood_group')}}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label" for="required_date">Required Date</label>   

                <div class="control">
                    <input class="@error('required_date') is-danger @enderror w-24 rounded shadow" name="required_date" id="required_date" type="text">
                </div>
                    @error('required_date')
                            <p class="help text-red-500 is-danger">{{$errors->first('required_date')}}</p>
                    @enderror
            </div>

            <div class="field py-2">
                <label class="label" for="doctors_name">Doctors Name</label>   

                <div class="control">
                    <input class="@error('doctors_name') is-danger @enderror w-1/2 rounded shadow" name="doctors_name" id="doctors_name" type="text">
                </div>
                    @error('doctors_name')
                            <p class="help text-red-500 is-danger">{{$errors->first('doctors_name')}}</p>
                    @enderror
            </div>

            <div class="field">
                <label class="label" for="hospital_details">Hospital Details</label>   

                <div class="control">
                    <textarea class="@error('hospital_details') is-danger @enderror label textarea w-full rounded shadow" name="hospital_details" id="hospital_details" type="text"></textarea>
                </div>
                    @error('hospital_details')
                            <p class="help text-red-500 is-danger">{{$errors->first('hospital_details')}}</p>
                    @enderror
            </div>

            <div class="field py-2">
                <label class="label" for="comments">Comments</label>   

                <div class="control">
                    <textarea class="label textarea w-full rounded shadow" name="comments" id="comments" placeholder="Please,enter any additional details your want to mention ?"></textarea>
                </div>
            </div>
            
            <div class="field is-grouped mb-4">
                <div label class="controll">   
                    <button class="button is-link rounded-lg bg-blue-500 font-bold text-white px-2 py-2 shadow" type="submit">SUBMIT</button>
                </div>
            </div>
        </form>  
    </div>
</div>
</x-app>