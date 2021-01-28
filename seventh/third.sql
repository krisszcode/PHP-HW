UPDATE auto
LEFT OUTER JOIN szerviz AS sz ON auto.id = sz.auto_id
SET auto.muszaki = 0
WHERE sz.datum <= DATE_SUB(CURDATE(), INTERVAL 2 YEAR) AND sz.auto_id IS NOT NULL