<?php 

function OutputHorizontalCard($Config)
{

    $Return = '
    <div class="col-md d-flex">
    '.((isset($Config['Hyperlink'])) ? '<a href="'.$Config['Hyperlink'].'" >' : '').' 
        <div class="card mb-3 h-100">
            <div class="row g-0 h-100">
                <div class="col-md-4">
                <img class="card-img card-img-left  h-100" loading="lazy" src="'.((isset($Config['CardImage'])) ? $Config['CardImage'] : '../Template/Sneat/img/elements/12.jpg').'" style="object-fit: cover;" alt="Card image">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">'.((isset($Config['CardTitle'])) ? $Config['CardTitle'] : '').'</h5>
                    <p class="card-text">
                    '.((isset($Config['CardDescription'])) ? nl2br($Config['CardDescription']) : '').'
                    </p>
                    <p class="card-text"><small class="text-muted">'.((isset($Config['CardSubtext'])) ? $Config['CardSubtext'] : '').'</small></p>
                </div>
                </div>
            </div>
        </div>
     '.((isset($Config['Hyperlink'])) ? '</a>' : '').'
    </div>
    '; 

    return $Return;
}

?>