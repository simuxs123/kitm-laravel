<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="/"><img src="../assets/images/logo/kitm2.png" alt="Logo"></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">

                    @roles('admin,darbuotojas,mokytojas,moksleivis')
                    <li class="sidebar-title">Duomenų surinkimas</li>
                    @endroles

                    @roles('admin,moksleivis')
                    <li class="sidebar-item ">
                        <a href="/moduleSurveys" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Modulių apklausos</span>
                        </a>
                    </li>
                    @endroles

                    @roles('admin,mokytojas,darbuotojas')
                    <li class="sidebar-item">
                        <a href="/self-assessment" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Mokytojų įvertinimas</span>
                        </a>
                    </li>
                    @endroles

                    @roles('admin,darbuotojas,mokytojas')
                    <li class="sidebar-item">
                        <a href="/qualification" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Mokytojų kvalifikacija</span>
                        </a>
                    </li>
                    @endroles

                    @roles('admin,darbuotojas')
                    <li class="sidebar-title">Ataskaitos</li>

                    <li class="sidebar-item  has-sub">

                    <li class="sidebar-item  ">
                        <a href="/assessmentReport" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Įsivertinimo ataskaita</span>
                        </a>
                    </li>
                    @endroles

                    @roles('admin,darbuotojas')
                    <li class="sidebar-title">Administravimas</li>
                    @endroles

                    @roles('admin')
                    <li class="sidebar-item">
                        <a href="/administration" class='sidebar-link'>
                            <i class="bi bi-pentagon-fill"></i>
                            <span>Vartotojų Administravimas</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/modules" class='sidebar-link'>
                            <i class="bi bi-egg-fill"></i>
                            <span>Modulių Valdymas</span>
                        </a>
                    </li>
                    @endroles

                    @roles('admin,darbuotojas')
                    <li class="sidebar-item">
                        <a href="/employeeMenu" class='sidebar-link'>
                            <i class="bi bi-egg-fill"></i>
                            <span>Darbuotojo meniu</span>
                        </a>
                    </li>
                    @endroles
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
</div>