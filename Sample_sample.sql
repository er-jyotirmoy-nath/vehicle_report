/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  jyoti
 * Created: 1 Apr, 2017
 */
SELECT veh_id,BA_no,
DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'),STR_TO_DATE(`oil_ch_exp`,'%Y-%m-%d')) AS oil_days, 
DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`air_filter_exp`,'%Y-%m-%d')) AS air_days,
DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`fuel_filter_exp`,'%Y-%m-%d')) AS fuel_days,
DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`bty_chg_exp`,'%Y-%m-%d')) AS bttr_days, 
DATEDIFF(STR_TO_DATE(sysdate(),'%Y-%m-%d'), STR_TO_DATE(`steering_oil_exp`,'%Y-%m-%d')) AS steer_days 
FROM `maint_dtl`

