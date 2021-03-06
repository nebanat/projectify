<article class-="media">
    <div class="media-content">
        <div class="content">
            <p>
                <strong>
                    <a href="#">{{ $file->title }}</a>
                </strong>
                <br>
                {{$file->overview_short}}
            </p>
        </div>
        <div class="level">
            <div class="level-left">
                <p class="level-item">
                    {{$file->isFree() ? 'Free' :'$'. $file->price}}
                </p>
                <p class="level-item">
                   {{$file->approved ? 'Approved':'Pending Approval'}}
                </p>
                <p class="level-item">
                    {{$file->live ? 'Live':'Not live'}}
                </p>
                <a href="#" class="level-item">Make changes</a>
            </div>
        </div>
        <hr>

    </div>
</article>