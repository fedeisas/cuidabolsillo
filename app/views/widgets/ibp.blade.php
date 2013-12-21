@if ($ibp)
  <p class="text-center">Datos del IBP para {{{ $ibp->province->name }}} ({{{ $ibp->reported_at->format('m/Y') }}})</p>
  <div class="table-responsive">
    <table class="table table-striped text-center">
      <thead>
        <tr>
          <th class="text-center">Mediana</th>
          <th class="text-center">Mínimo</th>
          <th class="text-center">Máximo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>${{ number_format($ibp->median, 2) }}</td>
          <td>${{ number_format($ibp->min, 2) }}</td>
          <td>${{ number_format($ibp->max, 2) }}</td>
        </tr>
      </tbody>
    </table>
  </div>
@endif