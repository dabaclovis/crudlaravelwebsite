<div class=" py-2 w3-card w3-container">
    {{-- sections1 --}}
    @if ($x == 1)

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('fname', 'First Name:') !!}
                    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('lname', 'Last Name:') !!}
                    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('mobile', 'Mobile:') !!}
                        {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('city', 'City:') !!}
                        {!! Form::text('city', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('zipcode', 'State:') !!}
                        {!! Form::text('state', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('zipcode', 'Zipcode:') !!}
                        {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class=" form-group">
                {!! Form::label('msg', 'Message:') !!}
                {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary w3-btn']) !!}
            </div>

    @endif
    {{-- sections2 --}}
    @if ($x == 2)

        <div class="w3-row-padding">
            <div class=" w3-half">
                <div class="form-group">
                    {!! Form::label('fname', 'First Name:', ['class' =>'w3-card p-2']) !!}
                    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('lname', 'Last Name:', ['class' =>'w3-card p-2']) !!}
                    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email Address:', ['class' =>'w3-card p-2']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class=" w3-half">
                <div class="form-group">
                    {!! Form::label('msg', 'Message:', ['class' => 'w3-card p-2']) !!}
                    {!! Form::textarea('msg', null, ['class' => 'form-conttrol']) !!}
                </div>
            </div>
        </div>

        <div class="form-group w3-topbar d-flex justify-content-center">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary mt-1']) !!}
        </div>

    @endif
    {{-- sections3 --}}
    @if ($x == 3)
        <form action="" method="post"></form>
    @endif
    {{-- sections4 --}}
    @if ($x == 4)
        <form action="" method="post"></form>
    @endif
    {{-- sections5 --}}
    @if ($x == 5)
        <form action="" method="post"></form>
    @endif
    {{-- sections6 --}}
    @if ($x == 6)
        <form action="" method="post"></form>
    @endif
    {{-- sections7 --}}
    @if ($x == 7)
        <form action="" method="post"></form>
    @endif
    {{-- sections8 --}}
    @if ($x == 8)
        <form action="" method="post"></form>
    @endif

    <div class=" d-flex justify-content-between w3-topbar">
        @if ($x == 2 || $x == 3 || $x == 4 || $x == 5 || $x == 6 || $x == 7)
        <button class=" btn btn-primary mt-1" wire:click='decrease'>prev</button>
        @endif
        @if ($x == 1 || $x == 2 || $x == 3 || $x == 4 || $x == 5 || $x == 6 )
        <button class=" btn btn-primary mt-1" wire:click='increase'>next</button>
        @endif

    </div>
</div>
