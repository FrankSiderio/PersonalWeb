<link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
<footer class="footer col-md-12">
    <div class="col-md-6">
        <h4>Site Map</h4>
        <a href="/">Home</a><br>
        <a href="">Work Experience</a><br>
        <a href="">Projects</a><br>
        <a href="">Skills</a><br>
        <a href="/contact">Contact</a><br>
    </div>
    <div class="col-md-6">
        <h4>This site was created with:</h4>
        <a href=""><img class="footerImage" src="../images/footer/aws.png"/></a>
        <a href=""><img class="footerImage" src="../images/footer/postgres.png"/></a><br>
        <a href=""><img class="footerImage" src="../images/footer/adonis.png"/></a>
        <a href=""><img class="footerImage" src="../images/footer/react.png"/></a>
        <a href=""><img class="footerImage" src="../images/footer/laravel.png"/></a>
    </div>
    <p>Copyright  {{ \Carbon\Carbon::now()->year }}  © Frank Siderio All rights reserved.</p>
</footer>

<style>

.footerImage {
    width: 100px;
    height: 100px;
}

</style>
