@extends('_name_.master')

@section('title', 'Testing')

@section('content')

<div id="homepage">
    <div class="container">
        <div class="results-card">
            <div class="results-card__results">
                <h1>Your Results</h1>
                <div class="score">
                    <span>76</span> of 100
                </div>
                <h2>Great</h2>
                <p>
                    You scored higher than 65% of the
                    people who have taken these tests.
                </p>
            </div>
            <div class="results-card__summary">
                <h1>Summary</h1>
                <ul class="summary-list">
                    <li class="summary__category reaction">
                        @include('_name_.partials.icons.reactionIcon')
                        <div class="category__class">Reaction</div>
                        <div class="category__rating"><span>80</span>/ 100</div>
                    </li>
                    <li class="summary__category memory">
                        @include('_name_.partials.icons.memoryIcon')
                        <div class="category__class">Memory</div>
                        <div class="category__rating"><span>92</span>/ 100</div>
                    </li>
                    <li class="summary__category verbal">
                        @include('_name_.partials.icons.verbalIcon')
                        <div class="category__class">Verbal</div>
                        <div class="category__rating"><span>61</span>/ 100</div>
                    </li>
                    <li class="summary__category visual">
                        @include('_name_.partials.icons.visualIcon')
                        <div class="category__class">Visual</div>
                        <div class="category__rating"><span>41</span>/ 100</div>
                    </li>
                </ul>
                <a href="#" class="btn_custom">Continue</a>
            </div>
        </div>
    </div>
</div>

@endsection