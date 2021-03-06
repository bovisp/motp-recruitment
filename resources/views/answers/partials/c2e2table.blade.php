<table class="table">
  <thead>
    <tr>
      <th scope="col">CYNA</th>
      <th scope="col">15Z</th>
      <th scope="col">18Z</th>
      <th scope="col">21Z</th>
      <th scope="col">00Z</th>
      <th scope="col">03Z</th>
      <th scope="col">06Z</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ __('components.qpf-table.precipitation-type') }}</th>
      <td>{{ $answers->naptt15 }}</td>
      <td>{{ $answers->naptt18 }}</td>
      <td>{{ $answers->naptt21 }}</td>
      <td>{{ $answers->naptt00 }}</td>
      <td>{{ $answers->naptt03 }}</td>
      <td>{{ $answers->naptt06 }}</td>
    </tr>
    <tr>
      <th scope="row">{{ __('components.qpf-table.precipitation-amount') }}</th>
      <td>{{ $answers->napat15 }}</td>
      <td>{{ $answers->napat18 }}</td>
      <td>{{ $answers->napat21 }}</td>
      <td>{{ $answers->napat00 }}</td>
      <td>{{ $answers->napat03 }}</td>
      <td>{{ $answers->napat06 }}</td>
    </tr>
  </tbody>
</table>

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">CYDF</th>
      <th scope="col">15Z</th>
      <th scope="col">18Z</th>
      <th scope="col">21Z</th>
      <th scope="col">00Z</th>
      <th scope="col">03Z</th>
      <th scope="col">06Z</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ __('components.qpf-table.precipitation-type') }}</th>
      <td>{{ $answers->dfptt15 }}</td>
      <td>{{ $answers->dfptt18 }}</td>
      <td>{{ $answers->dfptt21 }}</td>
      <td>{{ $answers->dfptt00 }}</td>
      <td>{{ $answers->dfptt03 }}</td>
      <td>{{ $answers->dfptt06 }}</td>
    </tr>
    <tr>
      <th scope="row">{{ __('components.qpf-table.precipitation-amount') }}</th>
      <td>{{ $answers->dfpat15 }}</td>
      <td>{{ $answers->dfpat18 }}</td>
      <td>{{ $answers->dfpat21 }}</td>
      <td>{{ $answers->dfpat00 }}</td>
      <td>{{ $answers->dfpat03 }}</td>
      <td>{{ $answers->dfpat06 }}</td>
    </tr>
  </tbody>
</table>