<a href="#" class="btn bg-purple btn-block mb-3">Ecrire un newsletter</a>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Menu</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item {{ Request::path() === 'admin/mailrelation' ? 'bg-secondary' : '' }}">
                <a href="{{ route('admin.mail.index') }}" class="nav-link">
                    <i class="fas fa-inbox"></i> Formulare de contact
                    <span class="badge bg-info float-right">{{ $contact_nbr }}</span>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'admin/mailrelation/newsletter' ? 'bg-secondary' : '' }}">
                <a href="{{ route('admin.mail.newsletter') }}" class="nav-link">
                    <i class="far fa-envelope"></i> Newsletter
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'admin/mailrelation/devis' ? 'bg-secondary' : '' }}">
                <a href="{{ route('admin.mail.devis') }}" class="nav-link">
                    <i class="far fa-file-alt"></i> Demande de devis
                    <span class="badge bg-info float-right">{{ $devis_nbr }}</span>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'admin/mailrelation/rdv' ? 'bg-secondary' : '' }}">
                <a href="{{ route('admin.mail.rdv') }}" class="nav-link">
                    <i class="far fa-calendar"></i> Prise de rendez-vous
                    <span class="badge bg-info float-right">{{ $rdv_nbr }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-trash-alt"></i> Corbeille
                </a>
            </li>
        </ul>
    </div>
    <!-- /.card-body -->
</div>