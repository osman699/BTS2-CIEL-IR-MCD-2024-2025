@extends('layouts.app')

@section('content')

<div class="welcome-block-1" style="background-image: url('{{ asset('img/ffe8f50201af51a0956875d2aeeb9e662eb0b228-3840x2160.webp')}}');">
    <div class="block-opacity w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <div class="h1 mb-0">LEAGUE of</div>
            <div class="h1">BRANLY</div>
            <div class="block-1-subtitle mt-3 mx-5 text-blue-5">
                <div class="h3">A training website for the students of BTS CIEL.</div>
                <div class="h3">HTML, CSS, JS, PHP, DCM & SQL</div>
            </div>
        </div>
    </div>
</div>
<div class="welcome-block-2 bg-gold-1">
    <div class="d-flex flex-column gx-5 container flex-lg-row">
        <div class="text-blue-7 d-flex justify-content-center flex-column p-5 col-lg-6">
            <h2>1. Create a Database Conceptual Model</h2>
            <p>Using the official League of Legends website and the Merise method, create a Conceptual Data Model (CDM) that represents the champions of Runeterra.</p>
            <p>Define all the Data Entities (also known as Entity) that represent the information in our system, for example we need the Entity "Champion".</p>
            <p>Then, define the Relationships between the Entities. Example: a Champion belongs to only one Region.</p>
            <p>These Relationships and Entities will form your Database Conceptual Model.</p>
            <p>You can use <a href="https://www.diagrams.net/" target="_blank" rel="noopener noreferrer" class="dcm-link link-underline-opacity-100-hover">Diagrams.net</a> to represent your DCM.</p>
        </div>
        <div class="col-sm d-flex justify-content-center align-items-center pb-5 col-lg-6">
            <img class="img-fluid" id="cdm-diagram" src="{{ asset('img/league_of_legends_diagram_v2.png')}}" />
        </div>
    </div>
</div>
<div class="welcome-block-3 bg-hextech-black text-gold-1">
    <div class="container p-5">
        <h2>2. Integrate your DCM entities in the website</h2>
        <p>To make your entities, use the next command and replace <code class="inline-code">Champion</code> by the appropriate name:</p>
        <pre><code class="language-bash">php artisan make:model Champion -m</code></pre>
        <p>Then edit the <code class="inline-code">up</code> function in files of <code class="inline-code">database/migrations</code> with the correct names. Each line corresponds to an attribute of your entity and will generate a column in your database.</p>
        <pre><code class="language-php">Schema::create('champions', function (Blueprint $table) 
{
    $table->id('champion_id');
    $table->string('name');
    $table->string('title')->nullable();
    $table->text('lore')->nullable();
    $table->string('resource_type');
    $table->date('release_date')->nullable();
    $table->timestamps();
});</code></pre>
        <p>Then run the migrations!</p>
        <pre><code class="language-bash">php artisan migrate</code></pre>
    </div>
</div>
<div class="welcome-block-2 bg-gold-1 text-blue-7 gold-theme-code">
    <div class="container p-5">
        <h2>3. Integrate your DCM relationships in the website</h2>
        <p>In each Model that you can find in <code class="inline-code">app/Models</code>, add the appropriate relationships:</p>
        <pre><code class="language-php">class Champion extends Model
{
    public function abilities()
    {
        return $this->hasMany(Ability::class, 'champion_id');
    }

    public function skins()
    {
        return $this->hasMany(Skin::class, 'champion_id');
    }
}
</code></pre>
        <p>You can find the complete list of Eloquent relationships in the <a href="https://www.diagrams.net/" target="_blank" rel="noopener noreferrer" class="dcm-link link-underline-opacity-100-hover">Laravel documentation</a>.</p>
        <pre><code class="language-bash">php artisan migrate</code></pre>
    </div>
</div>
<div class="welcome-block-3 bg-hextech-black text-gold-1">
    <div class="container p-5">
        <h2>Tips & tricks</h2>
        <p>To drop and redeploy your migrations:</p>
        <pre><code class="language-bash">php artisan migrate:fresh</code></pre>
    </div>
</div>
@endsection