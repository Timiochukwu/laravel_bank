@include('admin.section.header' , ['title' => " View | Customer"] )




<!--**********************************
            Content body start
        ***********************************-->
        <style>
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
    }

    .switch input {
        display: none;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 16px;
        background-color: #ccc;
        border-radius: 17px;
        /* Make the slider rounded */
        transition: 0.4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        border-radius: 50%;
        /* Make the circle round */
        transition: 0.4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:checked + .slider:before {
        transform: translateX(26px);
    }
</style>
<div class="p-6 mx-auto max-w-3xl">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text 2xl font-semibold mb-4"> Loan Summary</h1>
        <hr>

        <h3 class="text 2xl font-semibold mb-4">  First Installment</h3>
        @for($i = 1; $i <= $loanSummary->id; $i++)
       @switch($i)
       @case (0)
       {{"First"}}
        @break
        @case (1)
        {{"Second"}}
        @break

       @endswitch
          <h3 class="text 2xl font-semibold mb-4">  {{$i}} Installment</h3>
        
        @endfor
        
</div>
</div>
@include('admin.section.footer')