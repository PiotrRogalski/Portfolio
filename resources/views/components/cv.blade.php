<div class="A4-page-container shadow-lg mb-5">
  <div id="CV-header" class="px-5 pt-4">
    <div class="row">
      <div class="col">
        <h1 class="text-white mb-0">Piotr Rogalski</h1>
        <p class="text-lightgrey mb-1">Full stack developer</p>
        <span class="text-lightgrey mb-0">
          <i class="material-icons" style="position: relative; bottom: -5px;">phone</i>
          506 901 791
        </span>
      </div>
      <div class="col">
        <div id="CV-avatar-container" style="float: right;">
          <img src="{{ asset('images/avatar.jpg') }}" class="cv-avatar-center" alt="Nie znaleziono obrazu profile_img.jpg">
        </div>
        <span class="float-right text-lightgrey my-5 mr-4">Wiek: 23</span>
      </div>
    </div>
  </div>

  <div id="CV-skills" class="px-5 py-4">
    <h5 style="color: #333f50" class="m-0">UMIEJĘTNOŚCI</h5>
    @component('components/cvSkillsSection', ['technologyGroups' => $technologyGroups]) @endcomponent
  </div>

  <div id="CV-mail-footer">
      <div>
        <a href="mailto:piotr5rogalski@gmail.com" class="text-white mi-format-clear">
          <i class="material-icons" id="CV-mail-icon">mail</i>
          <span style="font-size: 24px;">piotr5rogalski@gmail.com</span>
        </a>
      </div>
  </div>
</div>


<div class="A4-page-container shadow-lg mb-5">
  <div id="CV-second-page-content">
    <div id="CV-experience">

    </div>
    <div id="CV-example-code">

    </div>
    <div id="CV-example-projects">

    </div>
    <div id="CV-additional">

    </div>
  </div>
  <div id="CV-clause">
    <span class="text-white" style="font-size: 12px">
        Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji procesu tej oraz
    przyszłych rekrutacji (zgodnie z ustawą z dnia 10 maja 2018 roku o ochronie danych osobowych (Dz. Ustaw z 2018, poz.
    1000) oraz zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w
    sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich
    danych oraz uchylenia dyrektywy 95/46/WE (RODO)).
    </span>
  </div>
</div>
<link href="{{ asset('/css/components/cv.css') }}" rel="stylesheet">

<style>
  #CV-experience {

  }

  #CV-example-code {


  }

  #CV-example-projects {

  }

  #CV-additional {

  }

  #CV-second-page-content {
    height: 89%;
  }

  #CV-clause {
    height: 11%;
    width: 100%;
    background-color: #333f50;
    padding: 30px 60px;
  }

  #CV-header {
    height: 11%;
    width: 100%;
    background-color: #333f50;
  }

  #CV-skills {
    height: 78%;
  }

  #CV-mail-footer {
    height: 11%;
    width: 100%;
    background-color: #333f50;
    padding: 50px 60px;
  }

  #CV-avatar-container {
    overflow: hidden;
    border: 3px solid #333f50;
    border-radius: 50%;
    width: 160px;
    height: 160px;
  }

  #CV-mail-icon {
    position: relative;
    bottom: -16px;
    font-size: 48px;
    margin: 0 16px 0 0;
  }

  .cv-avatar-center {
    margin: 0 auto;
    width: 100%;
  }

  .text-lightgrey {
    color: lightgrey;
  }
</style>