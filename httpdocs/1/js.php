<script>
document.addEventListener("DOMContentLoaded", function() {
const faqHeaders = document.querySelectorAll('.jtc');
faqHeaders.forEach(header => {
header.addEventListener('click', function() {
const answer = header.nextElementSibling;
answer.classList.toggle('active');
header.classList.toggle('expanded');
});
});
});



</script>