<?php

namespace Drupal\custom_product\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Represents a CustomProduct entity.
 *
 * @package Drupal\custom_product\Entity
 */
interface CustomProductInterface extends ContentEntityInterface, EntityChangedInterface
{

  /**
   * Get CustomProduct name;
   * @return string
   */
  public function getName();

  /**
   * Sets the CustomProduct name;
   *
   * @param string $name
   *
   * @return \Drupal\custom_product\Entity\CustomProductIntenface
   * The called CustomProduct Entity.
   */
  public function setName($name);

  /**
   * Gets the CustomProduct number
   * @return int
   */
  public function getProductNumber();

  /**
   * Sets the CustomProduct number.
   * @param int $number
   *
   * @return \Drupal\custom_product\Entity\CustomProductIntenface
   * The called CustomProduct Entity.
   */
  public function setProductNumber($number);

  /**
   * Gets CustomProduct remote ID.
   * @return string
   */
  public function getRemoteId();


  /**
   * Set the CustomProduct remote ID.
   * @param string $id
   *
   * @return \Drupal\custom_product\Entity\CustomProductIntenface
   * The called CustomProduct Entity.
   */
  public function setRemoteId($id);

  /**
   * Gets the CustomProduct source.
   * @return string
   */
  public function getSource();

  /**
   * Set the CustomProduct source.
   * @param string $source
   *
   * @return \Drupal\custom_product\Entity\CustomProductIntenface
   * The called CustomProduct Entity.
   */
  public function setSource($source);

  /**
   * Gets the CustomProduct creation timestamp
   * @return int
   */
  public function getCreatedTime();

  /**
   * Set the CustomProduct creation timestamp.
   * @param int $timestamp
   *
   * @return \Drupal\custom_product\Entity\CustomProductIntenface
   * The called CustomProduct Entity.
   */
  public function setCreatedTime($timestamp);
}
