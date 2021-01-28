SELECT ember.nev COUNT(auto.id) as autok_szama, ember.lakhely as lakhely FROM ember
LEFT JOIN auto ON ember.id = auto.ember_id
GROUP BY ember.id