<div>
  <div class="row">
  @if(isset($technologyGroups))
    @php
      $columnToGroupId = [
        'col-3'  => [1,2,5,6,7],
        'col-6'  => [8,9,10],
        'col'    => [3,11,12,13,14,15],
      ];
    @endphp
    @foreach($columnToGroupId as  $class => $column)
      <div class="{{ $class }} px-2">
      @foreach($technologyGroups as $group)
        @php
          $technologies = isset($group->technologies) ? $group->technologies->pluck('name') : [];
          $name = isset($group->name) ? $group->name : 'Grupa';
          $groupId = isset($group->id) ? $group->id : -1;
        @endphp

        @if(in_array($groupId, $column))
          @if(!empty($technologies))
            @component('components/skillGroup', [
              'color' => '#90aadb',
              'textColor' => '#4f636d',
              'lineHeight' => '1',
              'items' => $technologies,
            ])
              @slot('title') {!! $name !!} @endslot
            @endcomponent
          @endif
        @endif

      @endforeach
      </div>
    @endforeach
  @else
    <h5 class="p-5">Nie przekazano technologii</h5>
  @endif
  </div>
</div>
