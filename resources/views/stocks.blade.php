<x-app>
    <header class="px-40 lg:flex mb-4 items:center">
        <div>
            <img 
            src="/images/logo.svg"
            class="align-content:center object-sale-down h-24" 
            alt="logo"
            >
        </div>

        <div class="font-bold text-4xl px-2 py-6 text-green-500">
            BloodBank
        </div>
    </header>

    <h1 
        class="lg:flex mx-auto justify-between font-bold bg-blue-200 rounded" style="padding-left:5%;" >
        <div>
            DATE :-
        </div>
        <div>
            A+
        </div>
        <div>
            A-
        </div>
        <div>
            B+
        </div>
        <div>
            B-
        </div>
        <div style="padding-left:1%;">
            O+
        </div>
        <div>
            O-
        </div>
        <div>
            AB+
        </div>
        <div>
            AB-
        </div> 
    </h1>
    

    @foreach($stocks as $stock)
        <div class="lg:flex px-2 justify-between container mx-auto shadow rounded">
            <div>
                {{ $stock->date }}
            </div>
            <div>
                {{ $stock->A_pos }}
            </div>
            <div> 
                {{ $stock->A_neg }}
            </div>
            <div>
                {{ $stock->B_pos }}
            </div>
            <div>
                {{ $stock->B_neg }}
            </div>
            <div>
                {{ $stock->O_pos }}
            </div>
            <div>
                {{ $stock->O_neg }}
            </div>
            <div>
                {{ $stock->AB_pos }}
            </div>
            <div>
                {{ $stock->AB_neg }}
            </div>
        </div>
    @endforeach 
</x-app>