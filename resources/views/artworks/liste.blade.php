{{ $posts->links() }}
@foreach($posts as $post)
    <div class="artworks col s12 m6 l4" data-postid="{{ $post->id }}">
        <div class="card hoverable sticky-action">
            <div class="card-content">
                <div class="valign-wrapper">
                    <div class="col s2">
                        <a href="{{ route('user.show', ['id' => $post->user->id]) }}"><img src="@if(filter_var($post->user->avatar, FILTER_VALIDATE_URL)) {{$post->user->avatar}}
                    @else {{ asset('storage/uploads/avatars/' . $post->user->avatar) }}
                    @endif" alt="avatar artiste" class="circle responsive-img"></a>
                    </div>
                    <div class="col s10">
                        <a class="black-text" href="{{ route('user.show', ['id' => $post->user->id]) }}">By {{ $post->user->name or "Artiste"}}</a>
                        @if($post->user->likes()->first())
                        <span>
                            <i class="tiny material-icons">favorite</i>
                            <span class="countLike">{{ $post->user->likes()->count() }}</span>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-image grey lighten-5 waves-effect waves-block waves-light">
                @if(count($post->posts_photos))
                    <img class="activator" src=" {{ asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename)}}" alt="oeuvre d'art liinkart">
                @else
                    <img class="activator" src=" {{ asset('uploads/office.jpg')}}" alt="oeuvre d'art liinkart">
                @endif
            </div>
            <div class=" card-content">
                <span class="card-title activator grey-text text-darken-4">{{ ucfirst($post->titre) }}<i class="material-icons right">more_vert</i></span>
                <span class="chip-technique left-align">
                    @if (isset($post->category))
                    {{ $post->category->category }}
                    @endif
                </span>
                <span class="time-ago">{{ $post->created_at->diffForHumans() }} </span>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ ucfirst($post->titre) }}<i class="material-icons right">close</i></span>
                <p>{{ $post->contenu }}</p>
                @foreach($post->tags as $tag)
                    <a href="{{ url('artworks/tag/' . $tag->tag_url) }}" class="chip">{{ $tag->tag }}</a></li>
                @endforeach
            </div>
            <div class="card-action">
                <a href="{{ route('artworks.show', ['id' => $post]) }}" class="right-align">VOIR EN DETAILS</a>
            </div>
        </div>  
    </div>
@endforeach
{{ $posts->links() }}
<script>// Technique artistique
$(document).ready(function(){
    $( "span:contains('Peinture')" ).css( "color", "#ef9a9a");
    $( "span:contains('Peinture à Huile')" ).css( "color", "#f48fb1");
    $( "span:contains('Peinture acrylique')" ).css( "color", "#ce93d8");
    $( "span:contains('Aquarelle')" ).css( "color", "#b39ddb");
    $( "span:contains('Photographie')" ).css( "color", "#9fa8da");
    $( "span:contains('Photographie argentique')" ).css( "color", "#90caf9");
    $( "span:contains('Photographie numérique')" ).css( "color", "#81d4fa");
    $( "span:contains('Oeuvres sur papier')" ).css( "color", "#80deea");
    $( "span:contains('Dessin')" ).css( "color", "#80cbc4");
    $( "span:contains('Encre')" ).css( "color", "#a5d6a7");
    $( "span:contains('Estampe')" ).css( "color", "#c5e1a5");
    $( "span:contains('Sérigraphie')" ).css( "color", "#e6ee9c");
    $( "span:contains('Lithographie')" ).css( "color", "#fff59d");
    $( "span:contains('Collage')" ).css( "color", "#ffe082");
    $( "span:contains('Gravure')" ).css( "color", "#ffcc80");
    $( "span:contains('Linogravure')" ).css( "color", "#ffab91");
    $( "span:contains('Sculpture')" ).css( "color", "#bcaaa4");
    $( "span:contains('Sculpture bois')" ).css( "color", "#b0bec5");
    $( "span:contains('Sculpture argile')" ).css( "color", "#ef6c00");
    $( "span:contains('Sculpture métal')" ).css( "color", "#f9a825");
    $( "span:contains('Sculpture bronze')" ).css( "color", "#558b2f");
    $( "span:contains('Sculpture pierre')" ).css( "color", "#0277bd");
    $( "span:contains('Sculpture terre cuite')" ).css( "color", "#00695c ");
    $( "span:contains('Sculpture céramique')" ).css( "color", "#4527a0");
    $( "span:contains('Sculpture platre')" ).css( "color", "#c62828");
    $( "span:contains('Sculpture marbre')" ).css( "color", "#ad1457");
    $( "span:contains('Sculpture verre')" ).css( "color", "#6a1b9a");
    $( "span:contains('Technique mixte')" ).css( "color", "#00695c");
// Couleur coup de coeur
    var countLike = parseInt($('.countLike').html());
        if(countLike >= 1 && countLike <= 49){
            $('.countLike').prev().css("color", "#FFD905");
        } else if(countLike >= 50 && countLike <= 99){
            $('.countLike').prev().css("color", "#E8490C");
        } else if(countLike >= 100 && countLike <= 499){
            $('.countLike').prev().css("color", "#0DFF41");
        } else if(countLike >= 500 && countLike <= 999){
            $('.countLike').prev().css("color", "#0C77E8");
        } else if(countLike >= 1000 && countLike <= 9999){
            $('.countLike').prev().css("color", "#C700FF");
        }
});
</script>
