using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Mirror;
public class shooting : NetworkBehaviour
{

    public Transform firePoint;
    public GameObject bulletPrefab;

    public float bulletForce = 20f;

    // Update is called once per frame void Update()

    void Update()
    {
        if(Input.GetButtonDown("Fire1"))
        {
            Shoot();
        }
    }

    void Shoot()
    {
        if (isLocalPlayer)
        {
            GameObject bullet = Instantiate(bulletPrefab, firePoint.position, firePoint.rotation);
            Rigidbody2D rb = bullet.GetComponent<Rigidbody2D>();
            rb.AddForce(firePoint.up * bulletForce, ForceMode2D.Impulse);
        }
    }
}
