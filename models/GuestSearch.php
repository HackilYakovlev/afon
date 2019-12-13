<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guest;

/**
 * GuestSearch represents the model behind the search form about `app\models\Guest`.
 */
class GuestSearch extends Guest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dayofbirth', 'monthofbirth', 'yearofbirth', 'residentcountryid', 'workpositionid', 'createddate', 'statusid', 'sourceid', 'settled', 'dateofbirth', 'maritalstatusid', 'disease', 'visitscount', 'qualityid', 'shengen', 'pgroup', 'zagranend', 'roomtype', 'sum', 'managerid', 'resolution', 'issueddiamonitirion', 'usersender', 'changed', 'adminid'], 'integer'],
            [['name', 'secondname', 'surname', 'nameeng', 'surnameeng', 'passportseries', 'regionfrom', 'email', 'checkindate', 'checkoutdate', 'extra', 'placeofbirth', 'krestname', 'monahname', 'san', 'krestplace', 'krestyear', 'communion', 'churchyear', 'mychurch', 'diseasedescription', 'residentialaddress', 'homephone', 'workphone', 'mobilephone', 'skype', 'education', 'degree', 'institution', 'specialty', 'workplace', 'position', 'passportnumber', 'passportissued', 'dateofissue', 'expires', 'schengenvisa', 'shengencountry', 'visatermination', 'visacitydraw', 'goalpilgrimage', 'lastvisit', 'birthsurname', 'nationality', 'citizenship', 'citizenshipnow', 'ukrainpassportnumber', 'wife', 'fiomaidenname', 'placeofbirthvisa', 'childrens', 'father', 'mother', 'parentsfio', 'etcvisa', 'previousstay', 'transitroute', 'modeoftransport', 'anketadate', 'pgroupcode', 'countryresolution', 'typeofpassport', 'photo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Guest::find()->orderBy(['id'=>SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'dayofbirth' => $this->dayofbirth,
            'monthofbirth' => $this->monthofbirth,
            'yearofbirth' => $this->yearofbirth,
            'residentcountryid' => $this->residentcountryid,
            'workpositionid' => $this->workpositionid,
            'createddate' => $this->createddate,
            'statusid' => $this->statusid,
            'sourceid' => $this->sourceid,
            'settled' => $this->settled,
            'dateofbirth' => $this->dateofbirth,
            'maritalstatusid' => $this->maritalstatusid,
            'disease' => $this->disease,
            'visitscount' => $this->visitscount,
            'qualityid' => $this->qualityid,
            'shengen' => $this->shengen,
            'pgroup' => $this->pgroup,
            'zagranend' => $this->zagranend,
            'roomtype' => $this->roomtype,
            'sum' => $this->sum,
            'managerid' => $this->managerid,
            'resolution' => $this->resolution,
            'issueddiamonitirion' => $this->issueddiamonitirion,
            'usersender' => $this->usersender,
            'changed' => $this->changed,
            'adminid' => $this->adminid,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'secondname', $this->secondname])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'nameeng', $this->nameeng])
            ->andFilterWhere(['like', 'surnameeng', $this->surnameeng])
            ->andFilterWhere(['like', 'passportseries', $this->passportseries])
            ->andFilterWhere(['like', 'regionfrom', $this->regionfrom])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'checkindate', $this->checkindate])
            ->andFilterWhere(['like', 'checkoutdate', $this->checkoutdate])
            ->andFilterWhere(['like', 'extra', $this->extra])
            ->andFilterWhere(['like', 'placeofbirth', $this->placeofbirth])
            ->andFilterWhere(['like', 'krestname', $this->krestname])
            ->andFilterWhere(['like', 'monahname', $this->monahname])
            ->andFilterWhere(['like', 'san', $this->san])
            ->andFilterWhere(['like', 'krestplace', $this->krestplace])
            ->andFilterWhere(['like', 'krestyear', $this->krestyear])
            ->andFilterWhere(['like', 'communion', $this->communion])
            ->andFilterWhere(['like', 'churchyear', $this->churchyear])
            ->andFilterWhere(['like', 'mychurch', $this->mychurch])
            ->andFilterWhere(['like', 'diseasedescription', $this->diseasedescription])
            ->andFilterWhere(['like', 'residentialaddress', $this->residentialaddress])
            ->andFilterWhere(['like', 'homephone', $this->homephone])
            ->andFilterWhere(['like', 'workphone', $this->workphone])
            ->andFilterWhere(['like', 'mobilephone', $this->mobilephone])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'institution', $this->institution])
            ->andFilterWhere(['like', 'specialty', $this->specialty])
            ->andFilterWhere(['like', 'workplace', $this->workplace])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'passportnumber', $this->passportnumber])
            ->andFilterWhere(['like', 'passportissued', $this->passportissued])
            ->andFilterWhere(['like', 'dateofissue', $this->dateofissue])
            ->andFilterWhere(['like', 'expires', $this->expires])
            ->andFilterWhere(['like', 'schengenvisa', $this->schengenvisa])
            ->andFilterWhere(['like', 'shengencountry', $this->shengencountry])
            ->andFilterWhere(['like', 'visatermination', $this->visatermination])
            ->andFilterWhere(['like', 'visacitydraw', $this->visacitydraw])
            ->andFilterWhere(['like', 'goalpilgrimage', $this->goalpilgrimage])
            ->andFilterWhere(['like', 'lastvisit', $this->lastvisit])
            ->andFilterWhere(['like', 'birthsurname', $this->birthsurname])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'citizenship', $this->citizenship])
            ->andFilterWhere(['like', 'citizenshipnow', $this->citizenshipnow])
            ->andFilterWhere(['like', 'ukrainpassportnumber', $this->ukrainpassportnumber])
            ->andFilterWhere(['like', 'wife', $this->wife])
            ->andFilterWhere(['like', 'fiomaidenname', $this->fiomaidenname])
            ->andFilterWhere(['like', 'placeofbirthvisa', $this->placeofbirthvisa])
            ->andFilterWhere(['like', 'childrens', $this->childrens])
            ->andFilterWhere(['like', 'father', $this->father])
            ->andFilterWhere(['like', 'mother', $this->mother])
            ->andFilterWhere(['like', 'parentsfio', $this->parentsfio])
            ->andFilterWhere(['like', 'etcvisa', $this->etcvisa])
            ->andFilterWhere(['like', 'previousstay', $this->previousstay])
            ->andFilterWhere(['like', 'transitroute', $this->transitroute])
            ->andFilterWhere(['like', 'modeoftransport', $this->modeoftransport])
            ->andFilterWhere(['like', 'anketadate', $this->anketadate])
            ->andFilterWhere(['like', 'pgroupcode', $this->pgroupcode])
            ->andFilterWhere(['like', 'countryresolution', $this->countryresolution])
            ->andFilterWhere(['like', 'typeofpassport', $this->typeofpassport])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
