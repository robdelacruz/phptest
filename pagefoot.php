</div>
<script>
var theme = document.querySelector("#theme");
console.log(theme);
theme.addEventListener("change", function(e) {
    e.preventDefault();
    var sel = e.currentTarget.value;
    console.log(sel);
    document.querySelector("html").className = sel;
});
</script>
</body>
</html>

