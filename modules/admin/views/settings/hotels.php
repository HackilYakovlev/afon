<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <div class="list-group">
                <a class="list-group-item" href="/admin/settings/admins"><i class="glyphicon glyphicon-chevron-right"></i><?=Yii::t('app', 'Admins')?></a>
                <a class="list-group-item" href="/admin/settings/managers"><i class="glyphicon glyphicon-chevron-right"></i><?=Yii::t('app', 'Managers')?></a>
                <a class="list-group-item active" href="/admin/settings/hotels"><i class="glyphicon glyphicon-chevron-right"></i><?=Yii::t('app', 'Hotels')?></a>
                <a class="list-group-item" href="/admin/settings/guests"><i class="glyphicon glyphicon-chevron-right"></i><?=Yii::t('app', 'Guests')?></a>
            </div>
        </div>

        <div class="col-md-9 col-sm-8">
            <div class="default-view">
                <h1>Гостиницы</h1>
                <a class="btn btn-success" href="/admin/settiongs/createhotel"><?=Yii::t('app', 'Add hotel')?></a>
            </div>
            </form>
        </div>


    </div>

</div>