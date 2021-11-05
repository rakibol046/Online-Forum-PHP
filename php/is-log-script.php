<script>
    ///////////////////////////////////////////
// when User Clicks his/her profile
const profile = document.querySelector('.navigation__profile-user');

profile.addEventListener('click', function () {
  tabContent.forEach(content =>
    content.classList.remove('main-content__active')
  );
  document
    .querySelector('.main-content--4')
    .classList.add('main-content__active');
});
</script>