<template>
    <div class="alert {{ alert }} alert-dismissible fade show" role="alert">
        <strong>{{ title }}</strong> {{ message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</template>

<script>
    export default {
        props: ['alert','title','message']
        //
    }
</script>

