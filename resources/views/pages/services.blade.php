@extends('layout.app') {{-- Or use your layout file --}}

@section('style')
    @vite('resources/css/services-page.css')
@endsection

@section('title', 'Services')


@section('content')

    <section class="requirment-form-section"> 
        <div class="requirment-form-container">
            <div class="requirment-form-left-content">
                <div class="left-content">
                <h1>Welcome</h1>
                <p>Tell Us Your Requirement</p>
                </div>
            </div>
            <div class="requirment-form-right-content">
                <h3>Requirment Form</h3>
                <form action="" class="requirment-form">
                <div class="categorie-input">    
                <label for="">Categorie</label>    
                <select name="" id="">
                    <option value="">Select your categorie</option>
                    <option value="">I.T Workers</option>
                    <option value="">Electritions</option>
                    <option value="">Nursing staff</option>
                    <option value="">Plumbers</option>
                    <option value="">Mechanics</option>
                </select>
                </div>
                <div class="description-input">
                 <label for="">Description</label>   
                <textarea name="" id="" placeholder="Share Your Requirment"></textarea>
                </div>
                <div class="file-input">
                <label for="">Send image for work/Optional</label>   
                <input type="file" class="file" name="" id="">
                </div>
                <div class="requirment-send-btn">
                <input type="submit" value="Send Requirment">
                </div>
                </form>
            </div>
        </div>
    </section>


@endsection
