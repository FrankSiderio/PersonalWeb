@extends('layout')
    <title>Frank Siderio - Experience</title>
@section('content')

    <div class="hero-section">

        <img style="" class="hero-image" src="../images/experience/it_council_photo.jpg"/>

        <div class="hero-text">
            <h1>What I Do.</h1>
        </div>

    </div>

    <div class="heading">
        <h2 class="section-text">My work experience</h2>
    </div>

    <div id="Wawa Inc" class="container section">
        <div class="left-right">
            <div class="content">
                <h2 class="name">Developer at Wawa</h2>
                <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk.</p>
            </div>

            <div>
                <img class="img-responsive" src="../images/experience/wawa_mobile.png"/>
            </div>
        </div>
    </div><br></br>
    <div id="Marist SGA" class="container section">
        <div class="left-right">
            <div class="content">
                <h2 class="name">CIO at Marist SGA</h2>
                <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk.</p>
            </div>

            <div>
                <img class="img-responsive" src="../images/experience/sga.png"/>
            </div>
        </div>
    </div><br></br>
    <div id="iD Tech" class="container section">
        <div class="left-right">
            <div class="content">
                <h2 class="name">Instructor at iD Tech</h2>
                <p>Description text jfkdsl fdjsklf djskfld jskfldsj fksldjfk.</p>
            </div>

            <div>
                <img class="img-responsive" src="../images/experience/id_tech.jpg"/>
            </div>
        </div>
    </div>
    <hr></hr>
@endsection

<style>

.hero-text {
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.container-fluid {
   padding: 0px;
}

.left-right {
    display: grid;

    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
}

@media (max-width: 400px) {
    .left-right {
        grid-template-columns: repeat(1, 1fr);
    }
}

.content {
    text-align: center;
    margin-top: 100px;
}

@media (max-width: 950px) {
    .content {
        margin-top: 60px;
    }
}

@media (max-width: 600px) {
    .content {
        margin-top: 35px;
    }
}

@media (max-width: 545px) {
    .content {
        margin-top: 0px;
    }
}

.section {
    box-shadow: 0 10px 10px lightgray;

    background-color: #eeeeee;

    padding: 10px;
}

</style>


@section('js')
    <script src="{{asset('js/app.js')}}" ></script>
@endsection
