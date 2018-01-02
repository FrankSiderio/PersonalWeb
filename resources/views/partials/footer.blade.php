<link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
<footer class="footer col-md-12">
    <div class="col-md-6">
        <h4>Importnat Links:</h4>
        <a href="/">Home</a><br>
        <a href="/about">About</a><br>
        <a href="/experience#Work">Work Experience</a><br>
        <a href="/experience#Projects">Projects</a><br>
        <a href="/contact">Contact</a><br>
        <a target="_blank" href="../documents/Frank Siderio Resume.pdf">Resume</a>
    </div>
    <div class="col-md-6">
        <h4>This site was created with:</h4>
        <a target="_blank" href="https://aws.amazon.com/"><img class="footer-image" src="../images/footer/aws.png"/></a>
        <a target="_blank" href="https://www.postgresql.org/"><img class="footer-image" src="../images/footer/postgres.png"/></a><br>
        <a target="_blank" href="https://adonisjs.com/"><img class="footer-image" src="../images/footer/adonis.png"/></a>
        <a target="_blank" href="https://reactjs.org/"><img class="footer-image" src="../images/footer/react.png"/></a>
        <a target="_blank" href="https://laravel.com/"><img class="footer-image" src="../images/footer/laravel.png"/></a>
    </div>
    <p>Copyright  {{ \Carbon\Carbon::now()->year }}  © Frank Siderio All rights reserved.</p>
</footer>
